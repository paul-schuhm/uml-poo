# Template description textuelle de cas d'utilisation

> **Déroulement d'un cas d'utilisation (séquence)**, étape par étape. Peut prendre la forme d'un tableau, d'un document avec headers, etc. **À adapter à vos pratiques.**

## Header

- Nom du cas d'utilisation :
- Système concerné :
- Description : Une description succincte du cas d'utilisation
- Date de création :
- Date de dernière mise à jour :
- Version : 1.0
- Responsable(s) : qui est autorisé à modifier ce document
- Acteur principal :
- Acteurs secondaires :
- Pré-conditions : état du système au démarrage, hypothèses, conditions initiales données

## Enchaînement/Séquence nominale

> L'enchaînement où tout se passe bien. Ce qui est attendu. Étape par étape, avec un langage clair, concis et des références à des données ou des modèles de données bien défini (cf dictionnaire des données).

1. Étape 1. *Le système...*
2. Étape 2. *Le système...*
3. Etc.

## Enchaînements alternatifs

> Embranchements possibles. Bien indiquer **où il se commence** et comment on retourne à l'enchaînement nominal.

###  A1 : <condition du déclenchement de l'embranchement alternatif 1>. Par ex : *"Le crédit du compte est nul"*

L'enchaînement démarre après l'étape 2 de la séquence nominale :

3. Étape 3
4. Étape 4
5. Etc...

La séquence nominale reprend au point 8.

###  A2 : <condition du déclenchement de l'embranchement alternatif 2>

L'enchaînement démarre après l'étape 4 de la séquence nominale :

4. Étape 3
5. Étape 4
6. Etc...

La séquence nominale reprend à l'étape 6.

## Enchaînements d’exception

> Exception ou **erreur**. **Met fin au cas d'utilisation**. Gérer l'erreur et échouer avec grâce.

### E1 : <condition du déclenchement de l'erreur 1>. Par ex: "La carte introduite n’est pas valide"

L’enchaînement démarre après l'étape 1 de la séquence nominale :

1. Le système...
2. Le système... (Fin)

### E2 : <condition du déclenchement de l'erreur 2>

L’enchaînement démarre après l'étape 6 de la séquence nominale :

7. Le système...
8. Le système...
9. Le système... (Fin)

## Post-conditions

État du système *attendu* à la fin du CU (informations enregistrées, etc.)

## Remarques, contraintes optionnelles

Indiquer des *qualités* du système à respecter (disponibilité, performance, ) ou *exigences non fonctionnelles*.
