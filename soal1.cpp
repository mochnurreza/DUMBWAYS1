#include <iostream>

using namespace std;
// deklarasi dan inisiasi array
int main(){
    int array[5]={14, 13, 12, 11, 10}
    int minimal, maksimal;
    // menampilkan elemen data
    for (int i = 0; i < 5 count; i++)
    {
        cout << "data baris ke- " << i << "= " <<A[i]; << endl;
        
    }
    minimal = A[0];
    maksimal = A[0];
    // melakukan seleksi minimal dan maksimal
    for (int j = 0; j < 5 count; i++)
    {
        if (A[j] > maksimal)
        {
          maksimal= A[j];
        }
        if (A[j] < minimal)
        {
            minimal = A[j];
        }
            
    }
    cout <<"nilai tertinggi adalah= " << maksimal << endl;
    cout <<"nilai terendah adalah= " << minimal << endl;
    system("pause");
    return 0;   
}