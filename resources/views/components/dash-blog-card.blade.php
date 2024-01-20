<div class="col">
    <div class="card h-100">
        <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to additional
                content.
                This content is a little bit longer.
            </p>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary">
                    <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp;Read more
                </button>
                <div class="d-flex flex-direction-row">
                    {{-- not yet implement testing for something --}}
                    <form action="/blog/edit/{{ 0 }}" method="post">
                        @method('patch')
                        <button type="submit" class="btn btn-icon btn-secondary">
                            <span class="tf-icons bx bx-pen"></span>
                        </button>
                    </form>
                    {{-- not yet implement testing for something --}}
                    <form action="/blog/delete/{{ 0 }}" method="post">
                        @method('delete')
                        <button type="submit" class="btn btn-icon btn-danger">
                            <span class="tf-icons bx bx-pen"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
