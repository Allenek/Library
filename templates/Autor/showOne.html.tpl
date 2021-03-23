{extends '../baseTemplate.html.tpl'}
{block name=body}
   <table class="table table-striped">
     <thead>
       <th>Id</th>
       <th>Imie</th>
       <th>Nazwisko</th>
     </thead>
     <tbody>
       <tr>
         <td>{$data['ID_Autor']}</td>
         <td>{$data['Imie']}</td>
         <td>{$data['Nazwisko']}</td>
       </tr>
     </tbody>
   </table>
{/block}
