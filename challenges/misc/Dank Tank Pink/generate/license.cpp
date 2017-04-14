#include <iostream>
#include <string>
#include <cstring>
using namespace std;

int algorithm(string text){
  string first= text.substr(0,9);
  string second=text.substr(9,17);
  int add=0,minus=0;
  // for(auto &c : first){
  //   add+=int(c);
  // }
  // for(auto &c : second){
  //   minus+=int(c);
  // }
  for (int i =0; i< first.length();i++){
    add+=int(first[i]);
  }
  for (int i =0; i< second.length();i++){
    minus+=int(second[i]);
  }
  return add-minus;
}
bool checker(int val){
  if(val== 60){
    return true;
  }
  else{
    return false;
  }
}
int main(int argc, char ** argv){
if(argc !=2){
  cout << "Invalid number of arguments" <<endl;
  return 0;
}
if (strlen(argv[1])!=18){
  cout << "Length of string is not 18 characters long!"<< endl;
  return 0;
}
 if(checker(algorithm(argv[1]))){
   std::cout << "Is valid license" << '\n';
 }
 else{
   std::cout << "Is not a valid license" << '\n';
 }
}
