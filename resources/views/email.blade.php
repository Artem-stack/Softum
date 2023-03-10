<!doctype html>
<html lang="en">
  <head>
    <title>Send Email Using PHPMailer in Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 m-auto">
                <form action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow">
 
 
                        <div class="card-header">
                            <h4 class="card-title">Send Email Using PHPMailer</h4>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                        @endif

                        <?php $ip = request()->getClientIp();
                         $agent = Request::server('HTTP_USER_AGENT');
                         ?>
                        <input type="hidden" name="ip" id="ip" class="form-control" value="{{ $ip }}" >
                         <input type="hidden" name="agent" id="agent" class="form-control" value="{{ $agent }}" >
                      
 
                        <div class="card-body">
                            <div class="form-group">
                                <label for="emailRecipient">Email To </label>
                                <input type="email" name="emailRecipient" id="emailRecipient" class="form-control" placeholder="From"  >
                                  
                            </div>
                          
 
                            <div class="form-group">
                                <label for="emailBcc">To </label>
                                <input type="email" name="emailBcc" id="emailBcc" class="form-control" placeholder="Recipient" >
                               
                            </div>
                             

                            <div class="form-group">
                                <label for="emailCc">CC </label>
                                <input type="email" name="emailCc" id="emailCc" class="form-control" placeholder="Mail CC">
                                
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="emailSubject">Subject </label>
                                <input type="text" name="emailSubject" id="emailSubject" class="form-control" placeholder="Mail Subject">

                            </div>
             <label for="type">Type </label>   



             <select name="type">
  <option id="type"
     name="type" value="Html">Html</option>
  <option id="type"
     name="type" value="Text">Text</option>

</select> 
          
  <div>
                            <div class="form-group">
                                <label for="emailBody">Body </label>
                                <textarea name="emailBody" id="emailBody" class="form-control" placeholder="Body"></textarea>
                                  
                            </div>
                           
                            
                        </div>
 
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Send Email </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>