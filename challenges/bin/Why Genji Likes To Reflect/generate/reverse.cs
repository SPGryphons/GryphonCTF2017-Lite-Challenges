using System;
using System.Text;

namespace GCTFLite {
  class reverseMe{


    public static void printFlag(){
      int [] trueflag={0x50,0x70,0xc8,0x58,0x1b0,0x50,0x3f0,0x18,0x38,0x20,0x90,0xf0,0x3f0,0x3f0,0x0,0xf0,0x90,0xc8,0x3e8,0x90,0xf8,0x3f0,0x58,0x8,0x3f0,0x70,0xc8,0x90,0x60,0x90,0x8,0x3e8,0xc8,0x180};
      const int seed = 77;
      const int seed2 = 3;
      StringBuilder s = new StringBuilder();
      for(int i =0;i<trueflag.Length;i++){
        s.Append((char)((trueflag[i] >> seed2) ^ seed));
     }
     Console.WriteLine(s.ToString());
    }
    public static int eval(char op, int fst,int sec){
      switch(op){
        case '+': return fst+sec;
        case '-': return fst-sec;
        case '*': return fst*sec;
        default:
        return 0;
      }
    }
    public static void Main(string[] args)
    {
      bool flag =true;
      Random rand= new Random();
      char [] operations ={'+','-','*'};
      for(int i =0; i<1000 && flag;i++){
        Console.WriteLine("This is round " +i);
        char op=operations[rand.Next(3)];
        int fst=rand.Next(0,10000),sec=rand.Next(0,10000);
        Console.WriteLine("Solve this question : "+fst+" "+op+" "+sec);
        Console.Write("Your answer? ");
        String answer=Console.ReadLine();
        int ans=0;
        try {
          ans=Int32.Parse(answer);
        }
        catch(FormatException){

          Console.WriteLine("Invalid Input!");
          flag=false;
          break;
        }
        if(ans==eval(op,fst,sec)){
          Console.WriteLine("Answer is correct!");
        }
        else{
          Console.WriteLine("Incorrect Answer!");
          flag=false;
          break;
        }
      }
      if(flag){
        printFlag();
      }
      Console.ReadLine();
    }
  }
}
