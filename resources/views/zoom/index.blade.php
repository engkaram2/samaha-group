{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Zoom Meeting list</title>--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >--}}
{{--</head>--}}
{{--<body>--}}
{{--<h4 class="text-center">Zoom Meeting list</h4>--}}
{{--<a class="btn btn-success" href="{{route('zoom.create')}}">Create Zoom Meeting</a>--}}
{{--<table class="table">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">topic</th>--}}
{{--        <th scope="col">meeting id</th>--}}
{{--        <th scope="col">password</th>--}}
{{--        <th scope="col">start_at</th>--}}
{{--        <th scope="col">duration</th>--}}
{{--        <th scope="col">start_url</th>--}}
{{--        <th scope="col">control</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($meetings as $meeting)--}}
{{--        <tr>--}}
{{--            <td>{{$meeting->topic}}</td>--}}
{{--            <td>{{$meeting->meeting_id}}</td>--}}
{{--            <td>{{$meeting->password}}</td>--}}
{{--            <td>{{$meeting->start_at}}</td>--}}
{{--            <td>{{$meeting->duration}}</td>--}}
{{--            <td><a target="_blank" href="{{$meeting->start_url}}" class="btn btn-outline-success">start by Zoom APP</a></td>--}}
{{--            <td><a target="_blank" href="{{route('zoom.start',[--}}
{{--            //'topic'        =>  $meeting->topic,--}}
{{--            'meeting_id'   =>  $meeting->meeting_id,--}}
{{--            //'duration'     =>  $meeting->duration,--}}
{{--            'password'     =>  $meeting->password,--}}
{{--            //'start_url'    =>  $meeting->start_url,--}}
{{--            //'join_url'     =>  $meeting->join_url,--}}
{{--            //'signature'    =>  $meeting->signature,--}}
{{--        ])}}" class="btn btn-outline-success">start by Web APP</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
