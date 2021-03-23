{extends '../baseTemplate.html.tpl'}
{block name=body}
   <table class="table table-striped">
     <thead>
       <th>Id</th>
       <th>Nazwa</th>
     </thead>
     <tbody>
       <tr>
         <td>{$data['ID_Kategoria']}</td>
         <td>{$data['Nazwa']}</td>
       </tr>
     </tbody>
   </table>
{/block}
