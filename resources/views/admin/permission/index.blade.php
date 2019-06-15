@extends("admin.layout.main")
@section("content")
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">权限管理</h5>
            <p>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal" data-whatever="@mdo">增加权限</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">增加权限</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/admin/permissions/store" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">名称</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-form-label">内容</label>
                                    <input type="text" class="form-control" id="content" name="content">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="增加权限">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">名称</th>
                    <th scope="col">内容</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->content}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$items->links()}}
@endsection