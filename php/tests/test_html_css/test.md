# Questionnaire

**1. À quoi sert un reset CSS ?**

À ré-initialiser toutes les valeurs CSS de (tous) les éléments HTML afin de ne pas être tributaire des CSS par défaut des différents navigateurs Web.

**2. Quelle est l’utilité de faire valider son code par le W3C validator ?**

Voir si l'architecture de notre code respecte les normes W3C
 
→ Meilleure compréhension par les navigateurs des éléments de notre page

→ Meilleur référtencement Google par exemple


**3. Quelle est la différence entre les balises ul / li / ol ?**

UL :  Démarre une liste non ordonnée

  (Les items, éléments de la liste seront précédés éventuellement d'un symbole (Point - Rond, etc...) mais ce symbole ne précisera en rien l'ordre des items.)
  
OL :  Démarre une liste ordonnée

  (Les items, éléments de la liste seront précédés d'un ou plusieurs caractères (Chiffres, lettres, chiffres romains, etc...) qui précisera l'ordre des items.)
  LI :  Annonce un item, élément de la liste

**4. Dans quelle balise mettra t-on les informations de contact de l’auteur d’un article ?**

La balise "AUTHOR"  

  

**5. À quoi servent les balises meta d’un document HTML ?**

À indiquer des choses sensées être utilise pour une meilleur compréhension d'information concernant la page
( Exemple: Son codage de caractère (CHARSET), Les réglages relatifs au type de matériel pouvant le lire, la description du document, son auteur, etc...)

**6. Quelle est l’utilité des propriétés absolute relative fixed et sticky ?**

À préciser le comportement de la barre de navigation (NAVBAR) lors du scrolling éventuel de la page:
- Fixed: Elle restera fixe qu'elle que soit la position du scroll, et le document aussi... Ce qui a pour conséquence, si elle contient un menu ayant l'un de ses item sous forme de dropdown (Menu déroulant), de laisser se dernier cacher la partie supérieure du document...

- Sticky: Elle resdtera également fixe, mais si elle contient un menu ayant l'un de ses item sous forme de dropdown (Menu déroulant), le document descendra autant que nécessaire. Soit, en d'autres termes, ne viendra jamais cacher du contenu du document, qui reste alors complètement lisible. 

---

# Codes

**Seul le body est montré dans les exemples de code
Ce code est-il valide ?**

Non: ARTICLE et SECTION sont toutes 2 des balises marquant le début d'un bloc.
Sauf si un cas de réglages CSS le nécessiterait (et encore, une simple DIV en second niveau serait préférable...), l'une des 2 est de trop.
À priori, au vu du contenu de l'élément, la balise ARTICLE est la plus appropriée.


**De quelle couleur sera le texte ?**

Blue

**De quelle couleur sera le texte et le fond ?**

Texte White sur fond Violet

**Quels éléments seront soulignés ?**

Les items impairs, sauf le 1er

---

# Cas pratique

Dessiner un camion en HTML et CSS uniquement :


Au passage de la souris, le camion roule de l’autre côté de l’écran.
