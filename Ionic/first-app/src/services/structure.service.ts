import { Book, Cd } from "../models/Structure";

export class BookService {
    bookList : Book[]= [
        {
            name : 'TheBigDeal',
            Resume : [
                'Jamais le Code n a eté si facile ',
                'Vous pourrez trouver tout ce qu il vous faut dessus'
            ],
            Auteur : 'Ahmed',
            isDis : true 
        },
        {
            name : 'OurWorld',
            Resume : [
                'Difficile de trouver plus créatif',
                'Le livre de tout les temps'
            ],
            Auteur : 'Nahid',
            isDis : false
        }
    ]
}

export class CdService {
    CdList : Cd[]= [
        {
            name : 'Parle à ma main',
            Auteur : 'Fatal Bazzouka',
            isDis : true
        },
        {
            name : 'Desole',
            Auteur : 'Sexion D assault',
            isDis : false
        }
    ]
}