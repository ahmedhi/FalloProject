#include <iostream>
#include <string>
using namespace std;

class Ville {
protected:
    string Nom;
    int nbHabitants;
public:
    Ville( string NewNom = "Nom", int NewNbHabitants = 1) : Nom(NewNom) , nbHabitants(NewNbHabitants){

    }
    
    friend ostream& operator<< ( ostream& cout, Ville VilleValue){
        cout << "\nNom : " << VilleValue.Nom << " nombre d'habitant : " << VilleValue.nbHabitants << endl;
        return cout;
    }

};

class Capitale : public Ville {
public:
    Capitale( string NewNom = "Nom" , int NewNbHabitants = 1) : Ville(NewNom,NewNbHabitants){

    }

    friend ostream& operator<< ( ostream& cout , Capitale CapitaleValue){
        cout << "\nNom : " << CapitaleValue.Nom << " nombre d'habitant : " << CapitaleValue.nbHabitants << " CAPITALE" << endl;
        return cout ;
    }

};