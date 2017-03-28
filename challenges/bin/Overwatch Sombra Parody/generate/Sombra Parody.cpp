#include <iostream>
#include <string>

using namespace std;

 int c;
string flagger (){
  char f []= {55,58,100,94,58,58,58,82,89,68,112,89,78,88,78,89,108,72,112,95,108,88,96,95,73,59,79,71,94,126,100,88,95,68,58,88,'\0'};
  for (int i=0;i< sizeof(f)/sizeof(f[0]);i++){
    f[i]=f[i] ^ 10;
  }
  return c==65?f:"";
 }
int main (){
int a=1000,b=100;
c=b+a;
cout <<"'A' in ASCII starts at : " << c << endl;
if(a!=80 || b!=15){
  return 0;
}
cout << flagger() << endl;
}
