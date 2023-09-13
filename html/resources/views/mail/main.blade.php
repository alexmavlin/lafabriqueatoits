<h1>Message from the LFAT web site</h1>

@if(isset($email_data['project']))
    <p><strong>Project: </strong>{{ $email_data['project'] }}</p>
@endif

@if(isset($email_data['sector']))
    <p><strong>Sector: </strong>{{ $email_data['sector'] }}</p>
@endif

@if(isset($email_data['budget']))
    <p><strong>Budget: </strong>{{ $email_data['budget'] }}</p>
@endif

@if(isset($email_data['name']))
    <p><strong>Name: </strong>{{ $email_data['name'] }}</p>
@endif

@if(isset($email_data['phone']))
    <p><strong>Phone: </strong>{{ $email_data['phone'] }}</p>
@endif

@if(isset($email_data['email']))
    <p><strong>Email: </strong>{{ $email_data['email'] }}</p>
@endif

@if(isset($email_data['raison']))
    <p><strong>Raison: </strong>{{ $email_data['raison'] }}</p>
@endif