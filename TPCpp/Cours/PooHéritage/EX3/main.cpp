#include <iostream>
#include "header.h"
using namespace std;

int main() {
    cout << "Debut du test\n";
    Vehicule *pTab[4];
    pTab[0] = new Voiture(
            "333 A 06",
            2000,
            "Peugeot",
            "306",
            true,
            false
            );
    pTab[1] = new Voiture(
            "321 B 06",
            2001,
            "Renault",
            "clio",
            false,
            true
            );

    pTab[2] = new Camion(
            "1234 A 06",
            1993,
            "DAF",
            "T43",
            true,
            4
            );
    pTab[3] = new Camion(
            "765 D 06",
            1999,
            "Mercedes",
            "C.L",
            false,
            3
            );

    for( int i = 0 ; i < 4 ; i++)
            cout( pTab[i]) ;




    return 0;
}