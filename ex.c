#include <stdio.h>
#include <stdlib.h>
typedef struct
{
      int numero;
      char codeoperation;
      int temps operation;
     int rdv //rendezvous
}travail;
struct cellule
{
    patient val;
    struct element *suiv;
    };
    typedef struct cellule;

int menu()
    {
    int ch;
    system("cls");
    printf("listecreerliste\n");
    printf("listeajouter\n");
    printf("listesupprimerop\n");
    printf("cherchersequence\n");
    printf("supprimersequence\n");
    printf("0-quitter\n");
    do
    {
        printf("donner votre choix:");
        scanf("%d",&ch);
    }while(ch<0||ch>6);
    return ch;
    }
    void saiser(cellule *c)
    {
        printf("donner numero");
        scanf("%s",p->numero);
        fflush(stdin);
        printf("donner codeoperation");
        scanf("%s",p->codeoperation);
        printf("temps operatoire");
        scanf("%d",&tempsoperatoire);
    }
    
    cellule* chercherseqeuence(liste l,char  codeop[])
    {
        element *nouv,*parc;
        nouv=(cellule*)malloc(sizeof(cellule));
        nouv->val=p;
        nouv->suiv=NULL;
        if(tete==NULL)
            tete=nouv;
        else{
            parc=tete;
            while (parc->suiv!=NULL)
                parc=parc->suiv;
            parc->suiv=nouv;
        }
        return tete;
    }
    void comsultsalle(element *tete)
    {
        element *parc=tete;
        if(parc==NULL)
        {
             printf("SALLE VIDE");
        }

        else{
            while(parc!=NULL)
            {
                printf("%s\t%s\t %d\n",parc->val.nom,parc->val.rdv);
                parc=parc->suiv;
            }
        }
    }


}
element* supprimeop(liste l,char codeop[])
{
    element *parc,*preced;
    parc=tete;
    if(parc!=NULL)
    {
        if(parc->val.rdv==1)
        {
            tete=parc->suiv;
            free(parc);
        }
        else
        {
            while(parc!=NULL && parc->val.rdv==0)
            {
                preced=parc;
                parc=parc->suiv;
            }
             if(parc!=NULL)
             {
                 preced->suiv=parc->suiv;
                 free(parc);
             }
             else
             {
                 parc=tete;
                 tete=parc->suiv;
                 free(parc);

             }
        }
    }
    return tete;
}



void charger ()
{
    patient p;
    element tete=NULL;
    FILE *f=fopen("patient.txt","r");
    while(fscanf(f,"%s %S %d",t.numero,t.codeoperation,t.tempsoperatoire)!=EOF)
    {
        tete=ajoutpatient(tete,p);
    }
    fclose(f);
    return tete;
}

int main()
{
    patient p;
    element *tete=NULL;
    int ch,s,a ;
    do
    {
        ch=menu();
        switch(ch)
        {
            case 1:saiser(&p);
                    tete=ajoutpatient(tete,p);
                    break;
            case 2:ajouter(tete,&a,&s);
            printf("avec rdv=%d\n sans rdv=%d\n",a,s);
            break;
            case 3:supprimeop(tete);
            break;
            case 4:cherchersequence(tete);
            break;
            case 5:supprimersequence(tete);
            break;
            case 6:tete=charger();
            break;


        }system("pause");
    }while(ch!=0);

    return 0;
}