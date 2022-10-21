#include<iostream>
#include<cmath>

using namespace std;

int main(){

int a,b,reminder;

cout<<"enter the number of a"<<endl;
cin>> a;
cout<<"enter the number of b"<<endl;
cin>>b;

reminder=a/b;

if(reminder==0){

    cout<<"the number is multiple"<<endl;
}

else

cout<<"the number is not multiple"<<endl;

return 0;
}