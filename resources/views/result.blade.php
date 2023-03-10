<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
   h1 {
    margin-right: 55px; 
   }
  </style>
   
    <h2>Your message</h2>
    <table width="10 px" class="table table-borderless">
        <tr>
            <th>EmailRecipient</th>
            <th>EmailBcc</th>
            <th>EmailCc</th>
             <th>EmailBody</th>
              <th>Type</th>
         
        </tr>

        <tr>
            <td>{{ $request->emailRecipient }}</td>
            <td>{{ $request->emailBcc }}</td>
            <td>{{ $request->emailCc }}</td>
            <td>{{ $request->emailBody }}</td>
            <td>{{ $request->type }}</td>
        </tr>    
        
    </table>

