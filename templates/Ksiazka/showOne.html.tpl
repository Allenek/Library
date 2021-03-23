{extends '../baseTemplate.html.tpl'}
{block name=body}
   <table class="table table-striped">
     <thead>
       <th>Id</th>
       <th>Autor</th>
       <th>Nazwa</th>
       <th>Tytul</th>
       <th>Opis</th>
       <th>Wydawnictwo</th>
       <th>Rok_Wydania</th>
     </thead>
     <tbody>
       <tr>
         <td>{$data['ID_Ksiazka']}</td>
         <td>
           {if isset($ksiazka_autor[$data['ID_Ksiazka']])}
             {foreach from=$ksiazka_autor[$data['ID_Ksiazka']] item=$v}
               {$Autor[$v['ID_Autor']]['Imie']} {$Autor[$v['ID_Autor']]['Nazwisko']},
             {/foreach}
           {/if}
         </td>
         <td>{$Kategoria[$data['ID_Kategoria']]['Nazwa']}</td>
         <td>{$data['Tytul']}</td>
         <td>{$data['Opis']}</td>
         <td>{$Wydawnictwo[$data['ID_Wydawnictwo']]['Nazwa']}</td>
         <td>{$data['Rok_Wydania']}</td>
       </tr>
     </tbody>
   </table>
{/block}
