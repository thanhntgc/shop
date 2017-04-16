@extends('layouts.app')

@section('content')
<!-- START PAGE CONTENT -->

<!-- PRODUCT TAB SECTION START -->
<div class="product-tab-section section-bg-tb pt-80 pb-55">
    <div class="container">
        <table>
            <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
            </thead>

            <tbody>

            <?php foreach(Cart::content() as $row) :?>

                <tr>
                    <td>
                        <p><strong><?php echo $row->name; ?></strong></p>
                        <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                    </td>
                    <td><input type="text" value="<?php echo $row->qty; ?>"></td>
                    <td>$<?php echo $row->price; ?></td>
                    <td>$<?php echo $row->total; ?></td>
                </tr>

            <?php endforeach;?>

            </tbody>

            <tfoot>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Subtotal</td>
                <td><?php echo Cart::subtotal(); ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Tax</td>
                <td><?php echo Cart::tax(); ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Total</td>
                <td><?php echo Cart::total(); ?></td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- PRODUCT TAB SECTION END -->

<!-- END PAGE CONTENT -->
@endsection
