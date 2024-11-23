<x-layout>
    <div>
        <h1>
            -----< Simple Crud Operations in The Laravel >-----
        </h1>
    </div>
    <div>
        <table border=1>
            <tr>
                
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
            
                @foreach ($data as $d)
                <tr>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->password}}</td>
                </tr>   
                @endforeach
            
        </table>
    <form action="\Op" method="get">
        @csrf
        <div>
            <h2>
                Actions
            </h2>
        </div>
        <div>
            <h4><h4><hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-right: 13%;" >
               ---- Insert User Data -----
            </h4>
        </div>
        <div>
            <input type="text" name="name" id="name" placeholder="Enter User Name"  >
            <input type="Email" name="Email" id="Email" placeholder="Enter User Email"  >
            <input type="password" name="password" id="password" placeholder="Enter User password"  >
            <button type="submit">Insert</button>
        </div>
        
        <div>
            <h4><h4><hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-right: 13%;" >
               ---- Update User Data -----
            </h4>
        </div>
        <div>
            
            <select name="" id="">
            @foreach ($data as $d)
                <option value={{$d->name}}>{{$d->name}}</option>
                @endforeach
            </select>
            <input type="text" name="name" id="name" placeholder="Enter User Name"  >
            <input type="Email" name="Email" id="Email" placeholder="Enter User Email"  >
            <input type="password" name="password" id="password" placeholder="Enter User password"  >
            
            <button>Update</button>
            
        </div>
        <div>
            <h4><hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-right: 13%;" >
               ---- Delete User Data -----
            </h4>
        </div>
        <div>
            
            <select name="" id="">
            @foreach ($data as $d)
                <option value={{$d->name}}>{{$d->name}}</option>
                @endforeach
            </select>
            <button>Delete</button>

        </div><hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-right: 13%;" >
    </form>
    </div>
    
</x-layout>