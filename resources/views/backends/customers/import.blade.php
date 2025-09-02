<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                please download this file for example

                <a href="{{ route('customer.download') }}" class="btn btn-success btn-sm">Download Example</a>
            </div>
            <div class="col-12">
                <form action="{{ route('customer.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="file" name="excel" required>
                    <div class="my-3">
                        <button class="btn btn-success" type="submit">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
