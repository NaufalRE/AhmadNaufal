#include <iostream>
#include <conio.h>
#include <string.h>

using namespace std;

void cetak_gambar(){
	char data[10] = {'P', 'R', 'O', 'G', 'R', 'A', 'M', 'M', 'E', 'R'};
	int i, j, n;
	n = 10;
	for(i=0;i<n;i++){
		for(j=0;j<n;j++){
			//patern nya disini tinggal ganti i > data[i]
			if(i == j || j == (n-i-1) ){
				cout << " "<< data[i] << " ";
			}
			else{
				cout << " = ";
			}
		}
		cout << "\n";
	}
}

void cetak_something(int a, int b){
	for(int x = 0; x < a; x++){
		for(int y = 0; y < b; y++){
			cout << "=";
		}
		cout << "\n";
	}
}

int main(){
	cetak_gambar();
	cetak_something(6, 3);
}

