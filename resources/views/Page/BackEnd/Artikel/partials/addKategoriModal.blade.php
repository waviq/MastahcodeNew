<!-- Trigger the modal with a button -->
<button type="button" class=" btn-u" data-toggle="modal" data-target="#myModal">Buat Kategori Baru</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add new Kategori</h4>
            </div>
            <div class="modal-body">

                {!! Form::open(['url'=>'back/kategori','files'=>true]) !!}
                <!--NamaSkill form input-->
                <div class="form-group">
                    {!! Form::label('namaKategori','Nama Kategori:') !!}
                    {!! Form::text('namaKategori',null,['class'=>'form-control']) !!}
                </div>

                <!--Image form input-->
                <div class="form-group">
                    {!! Form::label('image','Image:') !!}
                    {!! Form::file('image',null,['class'=>'form-control']) !!}
                </div>

                <button type="submit" class="btn btn-success">save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                {!! Form::close() !!}


            </div>



        </div>

    </div>
</div>