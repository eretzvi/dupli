@extends('master')
@section('content')
 
<div class="container">
    <div class='row'>
        <div class="col-md-6">
        <form name='json' action="" method="POST" autocomplete="off">
        
            {{ csrf_field() }}
           <div class="form-group">
                <label for="InputJSON">* JSON object : </label>
                <textarea  name="data" class="form-control" rows="10" id="InputJSON" placeholder="paste JSON object"></textarea>
            </div>
          <div class="form-group">
             <input id='jsonsub' type="submit" name="submit" value="JSON" class="btn btn-success">
             <input type="reset" name="clear" value="Clear Form" class="btn btn-default" onclick="location.reload()">  
           </div>
        </form>
        </div>
        <div class="col-md-6">
            <pre><code>
            [{
		"name": "Clementine Bauch",
		"email": "Nathan@yesenia.net",
		"password": "e10adc3949ba59abbe56e057f20f883e"
	},

	{
		"name": "Patricia Lebsack",
		"email": "Julianne.OConner@kory.org",
		"password": "e10adc3949ba59abbe56e057f20f883e"
	},

	{
		"name": "Chelsey Dietrich",
		"email": "Lucio_Hettinger@annie.ca",
		"password": "e10adc3949ba59abbe56e057f20f883e"

	},

	{
		"name": "Mrs. Dennis Schulist",
		"email": "Karley_Dach@jasper.info",
		"password": "e10adc3949ba59abbe56e057f20f883e"
	},
	{
		"name": "Kurtis Weissnat",
		"email": "Telly.Hoeger@billy.biz",
		"password": "e10adc3949ba59abbe56e057f20f883e"
	},
	{
		"name": "Nicholas Runolfsdottir V",
		"email": "Sherwood@rosamond.me",
		"password": "e10adc3949ba59abbe56e057f20f883e"

	},
	{
		"name": "Glenna Reichert",
		"email": "Chaim_McDermott@dana.io",
		"password": "e10adc3949ba59abbe56e057f20f883e"

	}, {
		"name": "Ervin Howell",
		"email": "Shanna@melissa.tv",
		"password": "e10adc3949ba59abbe56e057f20f883e"

	}
]</code></pre>
        
        </div>
    </div> 

@endsection