<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Hotels</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Hotels</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 class="mb-3">Hotel List</h1>
                                        <input type="text" class="form-control" placeholder="Search..." wire:model.live.debounce.300ms="search">
                                    </div>


                                    <div class="col-6">
                                        <a wire:navigate href="/hotels/create" class="btn btn-primary float-end">Tambah
                                            Data</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">#</th> --}}
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Check In Time</th>
                                        <th scope="col">Check Out Time</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotels as $hotel)
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td>{{$hotel->name}}</td>
                                            <td>{{$hotel->address}}</td>
                                            <td>{{$hotel->phone}}</td>
                                            <td>{{$hotel->email}}</td>
                                            <td>{{$hotel->check_in_time}}</td>
                                            <td>{{$hotel->check_out_time}}</td>
                                            <td>
                                                <a wire:navigate href="hotels/{{$hotel->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                                <button wire:click="delete({{$hotel->id}})" wire:confirm="Are You Sure?" class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            {{$hotels->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>