# GCTFLite

This repository contains all the challenges for GCTF-Lite.

## Information of each challenge folder
Every challenge folder will have a `README.md` file that details what the challenge is about and how to solve it. The following explains the folders and their role.

- `distrib` contains all distributable files for all users
- `generate` contains all relevant source code used to generate the challenge (if not in service directory)
- `lib` contains all libraries that may be used in the challenge creation process
- `service` contains all the files needed to host the challenge on a server
- `solution` contains all the solution scripts or files.

## Setting up challenges for hosting
You may require `sudo` permissions to run these commands.

### Requirements
Challenges that require hosting uses Docker to isolate the challenges.  
To install Docker for the common Linux distributions, run the script at: https://get.docker.com/

### Setting up a challenge
1. Change your directory to the challenge you would wish to host.
2. Run the `build.sh` or `install.sh` scripts in either the root directory of the challenge or the service directory.
3. Type `docker inspect <containername>` or enter the docker via `docker exec -ti sh` and `ifconfig` to find the IP address and head to that IP.

## Others
To create a new challenge, follow the template on challenges/template/README.md
