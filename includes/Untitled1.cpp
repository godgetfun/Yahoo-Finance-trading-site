#include<bits/stdc++.h>
using namespace std;
int main(){
	freopen("companylist.csv","r",stdin);
	freopen("final.txt","w",stdout);
	string s;
	vector<string> temp;
	temp.push_back("values (\"");
	while(getline(cin,s)){
		int n=s.find(',');
		temp.push_back(s.substr(0,n));
		temp.push_back("\",\"");
		int n1=s.find(',',n);
		//cout<<n1<<endl;
		string st=s.substr(n+1);
		st.erase(std::remove(st.begin(), st.end(), ','), st.end());
		temp.push_back(st);
		temp.push_back("\"),(\"");
		}
		for(int i=0;i<temp.size();i++){
			cout<<temp[i];
		}
	}

