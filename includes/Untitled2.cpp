#include<bits/stdc++.h>
using namespace std;
void removeCharsFromString( string &str, char* charsToRemove ) {
   for ( unsigned int i = 0; i < strlen(charsToRemove); ++i ) {
      str.erase( remove(str.begin(), str.end(), charsToRemove[i]), str.end() );
   }
}
//example of usage:

int main(){
	freopen("222.txt","r",stdin);
	freopen("11.txt","w",stdout);
	string s;
	vector<string> temp;
//	temp.push_back("values (\"");
	while(getline(cin,s)){
		removeCharsFromString( s, ",." );
	//	int n=s.find(',');
		temp.push_back(s);
		}
		for(int i=0;i<temp.size();i++){
			cout<<temp[i]<<endl;
		}
	}


