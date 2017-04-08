from subprocess import Popen, PIPE

process = Popen(['reverse.exe'], stdin=PIPE, stdout=PIPE)

answer = ""
while process.poll() is None:  # While not terminated
    if answer != "":
        process.stdin.write((answer + "\n").encode())
        process.stdin.flush()
        answer = ""
        continue

    from_program = str(process.stdout.readline())
    if "Solve this question" in from_program:
        equation = from_program.split(":")[-1][:-5]
        answer = str(eval(equation))
    elif "GCTF" in from_program:
        print(from_program)
