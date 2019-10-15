@extends('layouts.job')

@section('content')

<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title service text-center trans_200">
						<h2>Full Job Description</h2>
					</div>
				</div>
			</div>
			</div>
		<div class="container">
			<div class="panel panel-default text-center">
				<div class="panel-body">
					<div class="row">
						
					<div class="col-md-8">
						
					
                    @if(count($jobs) > 0)
				@foreach($jobs->all() as $job)
                <h1>{{ $job->job_title }}</h1>
					<table class="table">
                        <thead class="thead-dark">
                          <tr>
						  <th scope="col">Requirment</th>
                            <th scope="col">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
						  	<td>{{ $job->requirement }}</td>
                            <td>{{ $job->description }}</td>
                          </tr>
                        </tbody>
                    </table>
					<table class="table">
                        <thead class="thead-dark">
                          <tr>
						  <tr>
                            <th scope="col">Location</th>
                            <th scope="col">Price Range</th>
						  </tr>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
						  	<td>{{ $job->location }}</td>
                            <td>{{ $job->salary_range }}</td>
                          </tr>
                        </tbody>
                    </table>
                	</div>
                    @endforeach
                @endif
                    <div class="col-md-4">
                    <h3>Application Form</h3>
                    <form class="form-horizontal" method="POST" action="{{ route('user.apply') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <!-- <label for="name" class="col-md-4 control-label">Name</label> -->

                            <!-- <div class="col-md-6"> -->
                                <input placeholder= "Enter Your Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <!-- <div class="col-md-6"> -->
                                <input placeholder= "Enter Your Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <!-- <label for="phone" class="col-md-4 control-label">phone</label> -->

                            <!-- <div class="col-md-6"> -->
                                <input placeholder= "Enter Your Phone Number" id="phone" type="number" class="form-control" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group">
                            <label for="file" class="col-md-4 control-label">Upload CV</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="cv" type="file" class="form-control" name="cv" required>
                                @foreach ($errors->get('cv') as $error)
                                    <span class="help-block">
                                        <strong>{{ $error }}</strong>
                                        
                                    </span>
                                @endforeach
                            <!-- </div> -->
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                Apply
                                </button><br>
                            </div>
                        </div>
                    </form>
						</div>	 
					
			</div>
		</div>
						
	</div>
				

			</div>
			</div>
			
	
	</div>




@endsection
