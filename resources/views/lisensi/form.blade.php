<div class="box box-info padding-1">
    <div class="box-body">

    <?php
    function generateRandomString($alpha = true, $nums = true, $usetime = false, $string = '', $length = 120) {
        $alpha = ($alpha == true) ? 'abcdefghijklmnopqrstuvwxyz' : '';
        $nums = ($nums == true) ? '1234567890' : '';
        
        if ($alpha == true || $nums == true || !empty($string)) {
            if ($alpha == true) {
                $alpha = $alpha;
                $alpha .= strtoupper($alpha);
            } 
        }
        $randomstring = '';
        $totallength = $length;
            for ($na = 0; $na < $totallength; $na++) {
                    $var = (bool)rand(0,1);
                    if ($var == 1 && $alpha == true) {
                        $randomstring .= $alpha[(rand() % mb_strlen($alpha))];
                    } else {
                        $randomstring .= $nums[(rand() % mb_strlen($nums))];
                    }
            }
        if ($usetime == true) {
            $randomstring = $randomstring.time();
        }
        return($randomstring);
        } // end generateRandomString

        $SKU = generateRandomString(false, true, false, '', 10);
        
    ?>
        <input type="hidden" name="email" value="{{Auth::user()->email}}">
        
        <div class="form-group">
            <input class="form-control" type="hidden" name="lisensi_key" value="<?php echo $SKU; ?>">
            <!-- {{ Form::label('license_key') }}: <?php echo $SKU; ?>
            {{ Form::text('lisensi_key', $lisensi->lisensi_key, ['class' => 'form-control' . ($errors->has('lisensi_key') ? ' is-invalid' : ''), 'placeholder' => 'Masukkan lisensi diatas']) }}
            {!! $errors->first('lisensi_key', '<div class="invalid-feedback">:message</p>') !!} -->
        </div>
        <!--div class="form-group">
            {{ Form::label('computer_id') }}
            {{ Form::text('computer_id', $lisensi->computer_id, ['class' => 'form-control' . ($errors->has('computer_id') ? ' is-invalid' : ''), 'placeholder' => 'Computer Id']) }}
            {!! $errors->first('computer_id', '<div class="invalid-feedback">:message</p>') !!}
        </div-->

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>