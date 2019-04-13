#include <iostream>
#include <string>

using namespace std;

class Date{
    int JJ, MM , AA;
public:
    Date( int NewJJ = 1, int NewMM =1 , int NewAA = 2000) : JJ(NewJJ) , MM(NewMM) , AA(NewAA){}
};

class employé {
private:
    unsigned int Matricule ;
    string Nom, Prenom;
    Date DateDeNaissance;
protected:
    double Salaire;
public:
    employé( int Mat = 0 , string NewNom = "", string NewPrenom ="" , class::Date NewDate = (1,1,2000) ){}

    unsigned int GetMatricule(){
        return Matricule;
    }

    void SetMatricule(unsigned int NewMat){
        Matricule = NewMat;
    }

    string GetNom(){
        return Nom;
    }

    void SetNom( string NewNom){
        Nom = NewNom;
    }

    string GetPrenom(){
        return Prenom;
    }

    void SetPrenom( string NewPrenom){
        Prenom = NewPrenom;
    }

    Date GetDate(){
        return DateDeNaissance;
    }

    void SetDate( Date NewDate){
        DateDeNaissance = NewDate;
    }

    void Afficher();

    virtual double CalculerSalaire() = 0;

};

class ouvrier : public employé{
private:
    static unsigned int SMIG ;
    unsigned int Anciennete ;
public:
    ouvrier( unsigned int Mat = 0 , string NewNom = "", string NewPrenom ="" , class::Date NewDate = (1,1,2000) , unsigned int An = 0)
            : employé(Mat, NewNom , NewPrenom , NewDate) , Anciennete(An){}

    double CalculerSalaire(){
        return Salaire = min(SMIG + ( Anciennete ) * 100, SMIG * 2) ;
    }

};

unsigned int ouvrier::SMIG = 2500;

class cadre : public employé{
private:
    int indice;
public:
    cadre ( unsigned int Mat = 0 , string NewNom = "", string NewPrenom ="" , class::Date NewDate = (1,1,2000) , unsigned int Ind = 1)
            : employé(Mat, NewNom , NewPrenom , NewDate) , indice(Ind){}

    double CalculerSalaire(){
        switch (indice){
            case 1 : Salaire = 13000;
                break;
            case 2 : Salaire = 15000;
                break;
            case 3 : Salaire = 17000;
                break;
            case 4 : Salaire = 20000;
                break;
            default: Salaire = 13000;
        }
        return Salaire;
    }

};

class patron : public employé{
private:
    double CA , Pourcentage;
public:
    patron(unsigned int Mat = 0 , string NewNom = "", string NewPrenom ="" , class::Date NewDate = (1,1,2000) , double NewPourcentage = 0, double NewCA = 0)
            : employé(Mat, NewNom , NewPrenom , NewDate) , Pourcentage(NewPourcentage) , CA(NewCA){}

    double CalculerSalaire(){
        return Salaire = ( CA * Pourcentage /100 ) / 12 ;
    }
};
