{{$errors}}
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            {!! Form::text('customer_name',$data['row']->customer_name??null,[
                'class'=> $errors->has('customer_name')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Customer Name',
               ]) !!}
            @error('customer_name')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="email">Email</label>
            {!! Form::text('email',$data['row']->email??null,[
                'class'=> $errors->has('email')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Email',
               ]) !!}
            @error('email')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            {!! Form::text('phone_number',$data['row']->phone_number??null,[
                'class'=> $errors->has('phone_number')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Phone Number',
               ]) !!}
            @error('phone_number')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="address">Address</label>
            {!! Form::text('address',$data['row']->address??null,[
                'class'=> $errors->has('address')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Address',
               ]) !!}
            @error('address')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="item_id">Item</label>
            <select name="item_id" value="{{ old('item_id', $order->item_id ?? '') }}"
                    class="form-control @error('item_id')is-invalid @enderror" id="itemId"
                    placeholder="Item">
                <option>--Select Item--</option>
                @foreach($orders['items'] as $item)
                    <option id="item_id" value="{{$item->id}}" selected="selected">{{$item->item_name}}</option>
                @endforeach
            </select>
            @error('item_id')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            {!! Form::text('quantity',$data['row']->quantity??null,[
                'class'=> $errors->has('quantity')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Quantity',
               ]) !!}
            @error('quantity')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label for="message">Additional Message</label>
            {!! Form::textarea('message',$data['row']->message??null,[
                  'class'=> $errors->has('message')?'form-control is-invalid':'form-control',
                  'placeholder'=>'Additional Message',
                  'id' => 'summernote'
                  ]) !!}
            @error('message')
            <span class="help-block invalid-feedback">
                     <strong> {{ $message }} </strong>
                    </span>
            @enderror
        </div>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            <label class="">Status</label>
            <div class="form-check">

                {!! Form::select('status',['1' => 'Active', '0' => 'InActive'], $data['row']->status ??null,[
                         'class'=> $errors->has('status')?'form-control is-invalid':'form-control',

                                                    ]) !!}
{{--                <input class="form-check-input @error('status')is-invalid @enderror"--}}
{{--                       {{ old('status', $appointment->status ?? '')? "checked": "" }}--}}
{{--                       type="checkbox" name="status">--}}
                @error('status')
                <span class="error invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>


</div>


<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Order</button>
</div>
