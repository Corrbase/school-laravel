<div class="w-75 modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3 ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/r/login" method="POST">
                @csrf

                <div class="d-flex align-items-center mb-3 pb-1 pt-3">

                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Create Student</span>

                </div>

                <div class="d-flex align-items-center mb-3 pb-1 pt-1">

                </div>

{{--                <div class="form-outline mb-4">--}}
{{--                    <input value="{{old('name')}}" name="name" type="name" id="formname" class="form-control form-control-lg" />--}}
{{--                    <label class="form-label" for="formname">name address</label>--}}

{{--                    @error('name')--}}
{{--                    <p class="text-xs mt-1" style="color: red">--}}
{{--                        {{$message}}--}}
{{--                    </p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="form-outline mb-4">--}}
{{--                    <input value="{{old('Last name')}}" name="Last name" type="Last name" id="forLast name" class="form-control form-control-lg" />--}}
{{--                    <label class="form-label" for="forLast name">Last name</label>--}}

{{--                    @error('Last name')--}}
{{--                    <p class="text-xs mt-1" style="color: red">--}}
{{--                        {{$message}}--}}
{{--                    </p>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="form-outline mb-4">--}}
{{--                    <input value="{{old('a')}}" name="a" type="a" id="forLast name" class="form-control form-control-lg" />--}}
{{--                    <label class="form-label" for="fora">Last name</label>--}}

{{--                    @error('a')--}}
{{--                    <p class="text-xs mt-1" style="color: red">--}}
{{--                        {{$message}}--}}
{{--                    </p>--}}
{{--                    @enderror--}}
{{--                </div>--}}



                <div class="pt-1 mb-4">
                    <button class="btn btn-outline-danger type="submit">login</button>
                </div>

                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/register" style="color: red;">Register here</a></p>
            </form>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add student</button>
            </div>
        </div>
    </div>
</div>
