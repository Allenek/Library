{extends '../baseTemplate.html.tpl'}
{block name=body}
   <table class="table table-striped">
     <thead>
       <th>Id</th>
       <th>Tytuł</th>
       <th>Sygnatura</th>
       <th>Cena Zakupu</th>
       <th>Stan</th>
       <th></th>
     </thead>
     <tbody>
       <tr>
         <td>{$data['ID_Egzemplarz']}</td>
         <td>{$Ksiazka[$data['ID_Ksiazka']]['Tytul']}</td>
         <td>{$data['Sygnatura']}</td>
         <td>{$data['Cena_Zakupu']}</td>
         <td>{$data['Stan']}</td>
       </tr>
     </tbody>
   </table>
{/block}
