# my_cv

https://symphony-inestolooie.c9users.io/my_cv/public/index.php/lucky/number
Ce lien mène au site de mon CV



https://symphony-inestolooie.c9users.io/my_cv/public/index.php/admin
Ce lien permet de se connecter en tant qu'admin
nom d'utilisateur : admin
mot de passe: ines

Vous pouvez modifier, supprimer et ajouter des éléments.



 <td>
                   {% if is_granted('ROLE_ADMIN') %} <a href="{{ path('competence_show', {'id': competence.id}) }}">show</a> {% endif %}
                   {% if is_granted('ROLE_ADMIN') %} <a href="{{ path('competence_edit', {'id': competence.id}) }}">edit</a> {% endif %}
                   {% if is_granted('ROLE_ADMIN') %} <a href="{{ path('competence_delete', {'id': competence.id}) }}">delete</a> {% endif %}
                </td>
              {% endfor %}
                <h2></h2>
                
                
                J'ai rajouter ce code pour montrer, modifier et supprimer les éléments.
