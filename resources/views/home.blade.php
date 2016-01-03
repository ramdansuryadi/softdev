<!DOCTYPE html>
<html>
    <head>
        <title>Tampil Data</title>
        <style>
    
table{
width:20%;
}
 td:last-child   {
width:50%;
border: 1px solid black;
}
td{
    border: 1px solid black;
}
th {
   border: 1px solid black;
}
</style>
    </head>
     <body>
        <table>
            <tr>
            <th>no</th>
              <th>Materi</th>
              <th>Isi Konten</th>
                <th>Action</th>
          </tr>
          @foreach($data as $materi)
          <tr>
            <td>{{$materi->id}}
              <td>{{ $materi->nama}}</td>
              <td>{{ $materi->desc}}</td>
              <td><a href='#'>hapus</a> <a href='#'>tambah></a></td>
          </tr>
             @endforeach
      </table>
   
    </body>
</html>
