#include<stdio.h>
#include<string>
using namespace std;


class Client{
private:
    string Nom, Prenom;
public:
    Client(string newNom = "Nom", string newPrenom = "Prenom"){
        Nom = newNom ;
        Prenom = newPrenom ;        
    }

};
    
class Compte{
private:
    long numCompte, solde;
    Client newClient;

public:    
    static unsigned long compteurNumero ;
    Compte();
    Compte( long , Client );
    
    long getSlode();
    long getNumero();
    Client getProprietaire();
    
    bool CheckRetirer( long );
    void Crediter( long );
    void Debiter( long );
    void Afficher();
    void virer( long , Compte& );
    bool Egal( Compte );
    
    };

unsigned long Compte::compteurNumero = 1001;    

Compte::Compte(){
    numCompte = compteurNumero;
    solde = 0;
    }

Compte::Compte( long som, Client prop){
    numCompte = compteurNumero++;
    solde = som;
    newClient = prop;
}

Client Compte::getProprietaire(){
    return newClient;
}

bool Compte::CheckRetirer( long som){
    return ( solde >= som );
}

void Compte::Crediter( long som ){
    if(CheckRetirer(som)){
        solde -= som
    }
}