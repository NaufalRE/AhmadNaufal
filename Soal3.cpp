#include<iostream>
#include<cstdlib>
using namespace std;
//batas data bebas
string arr[100];
string cetak(int input){

	//Pakai semua karakter
	static const string charList = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	
	string alphanumeric = "";
	for(int x = 0; x < input; x++){
		for(int i = 0; i < 32; i++) {
			alphanumeric += charList [rand() % charList.size()];
		}
		
		arr[x] = alphanumeric;
		alphanumeric = "";
		//cek disini ! apakah array x sama dengan nilai array sebelumnya
		if(x > 0){
			if(arr[x] != arr[x-1]){
				for(int i = 0; i < 32; i++) {
					alphanumeric += charList [rand() % charList.size()];
				}
				arr[x] = alphanumeric;
				alphanumeric = "";
			}
		}
	}
//	for(int i = 0; i < 32; i++) {
//		alphanumeric += charList [rand() % charList.size()];
//	}
	//jika langsung dicetak di function
	for(int x = 0 ; x < input; x++){
		cout << arr[x] << "\n";
	}

}

int main(){
	cetak(12);
	return 0;
}
