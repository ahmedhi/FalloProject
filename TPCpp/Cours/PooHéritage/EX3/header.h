//
// Created by britos on 28/03/19.
//

#include <iostream>
#include <string>
using namespace std;

class Vehicule{
private:
    string Immat , Marque , Modele;
    int AnneeConst;
public:
    Vehicule( string NewImmat = "", int NewAnnee = 2000, string NewMarque = "", string NewModel = "")
        : Immat(NewImmat) , Marque(NewMarque) , Modele(NewModel) , AnneeConst(NewAnnee){}

    virtual void operator= ( const Vehicule &NewVehicule){
        Immat = NewVehicule.Immat;
        Marque = NewVehicule.Marque;
        Modele = NewVehicule.Modele;
        AnneeConst = NewVehicule.AnneeConst;
    }

    friend ostream &operator<< ( ostream &cout , Vehicule *NewVehicule){
        cout << "\tImmatriculation : " << NewVehicule->Immat << "\n\tAnnée de construction : " << NewVehicule->AnneeConst
        << "\n\tMarque : " << NewVehicule->Marque << "\n\tModele : " << NewVehicule->Modele;
        return cout;
    }

    virtual void cout (Vehicule *NewVehicule){
        std::cout << NewVehicule ;
    }

};

class Voiture : public Vehicule{
private:
    bool Deca , Clima;
public:
    Voiture( string NewImmat = "", int NewAnnee = 2000, string NewMarque = "", string NewModel = "" , bool NewDeca = false , bool NewClima = false)
        : Vehicule(NewImmat,NewAnnee,NewMarque,NewModel) , Deca(NewDeca) , Clima(NewClima){}

    void operator= ( Voiture &NewVoiture ){
        (Vehicule)*this = (Vehicule)NewVoiture;
        Deca = NewVoiture.Deca;
        Clima = NewVoiture.Clima;
    }

    friend ostream &operator<< ( ostream &cout , const Voiture *NewVoiture){
        cout << "Voiture " << ((NewVoiture->Deca)? "" : "Non ") << "décapotable , " << ((NewVoiture->Clima)? "" : "sans ") << "climatisation\n";
        cout << (Vehicule*)NewVoiture ;
        return cout;
    }

    void cout (Voiture *NewVoiture){
        std::cout << "Voiture " << ((NewVoiture->Deca)? "" : "Non ") << "décapotable , " << ((NewVoiture->Clima)? "" : "sans ") << "climatisation\n";
        std::cout << (Vehicule*)NewVoiture ;
    }
};

class Camion : public Vehicule{
private:
    bool SemiRemorque;
    int Essui;
public:
    Camion( string NewImmat = "", int NewAnnee = 2000, string NewMarque = "", string NewModel = "" , bool NewSemiRemo = false , int NewEssui = 0)
    : Vehicule(NewImmat,NewAnnee,NewMarque,NewModel) , SemiRemorque(NewSemiRemo) , Essui(NewEssui){}

    void operator= ( const Camion &NewCamion ){
        (Vehicule)*this = (Vehicule)NewCamion;
        SemiRemorque = NewCamion.SemiRemorque;
        Essui = NewCamion.Essui;
    }


};