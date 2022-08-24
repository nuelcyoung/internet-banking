<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="MobileOptimized" content="320" />
  <meta name="HandheldFriendly" content="True" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Statement View</title>
  <meta name="description" content="Web Banking" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="/assets/images/favicon.ico">


</head>


<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="invoice-title">
              <div class="d-flex align-items-start">
                <div class="float-start">
                  <div class="mb-4">
                    <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/assets/images/logo-1.png';?>" alt="" height="24"><span class="logo-txt"><?= $site_setting->site_name ?></span>
                  </div>
                </div>
                <div class="float-end">
                  <div class="mb-4">
                    <h4 class="float-end font-size-16">
                      <p class="mb-1">Sonnenweg 24, Martherenges, Switzerland.</p>
                      <p class="mb-1">info@ofusebank.com</p>
                      <p><?= $site_setting->phone ?></p>
                    </h4>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <hr class="my-4">
          <div class="card-body">
            <div class="p-4 d-flex justify-content-center col-lg-12">
              <div class="table-responsive col-lg-6">
                <table class="table table-nowrap  mb-0">
                  <tbody>
                    <tr>
                      <td align="right">
                        <h5 class="font-size-15 mb-1">Payment From</h5>
                      </td>
                      <td align="left" class="text-left"><?= $user->firstname . ' ' . $user->lastname ?></td>
                    </tr>
                    <tr>
                      <td align="right">
                        <h5 class="font-size-15 mb-1">Amount</h5>
                      </td>
                      <td align="left" class="text-left"><?= number_format($detail->amount, '0.00') ?></td>
                    </tr>
                    <tr>
                      <td align="right" class="text-right">
                        <h5 class="font-size-15 mb-1">Payment Date From Ofusebank</h5>
                      </td>
                      <td align="left" class="text-left"><?= $detail->created_at ?></td>
                    </tr>
                    <tr>
                      <td align="right" class="text-right">
                        <h5 class="font-size-15 mb-1">Payment Reference</h5>
                      </td>
                      <td align="left" class="text-left"><?= $detail->reference ?></td>
                    </tr>
                    <tr>
                      <td align="right" class="text-right">
                        <h5 class="font-size-15 mb-1">Beneficiary Account Name</h5>
                      </td>
                      <td align="left" class="text-left"><?= $detail->bname ?></td>
                    </tr>
                    <tr>
                      <td align="right" class="text-right">
                        <h5 class="font-size-15 mb-1">Beneficiary Bank</h5>
                      </td>
                      <td align="left" class="text-left"><?= $detail->to_bank ?></td>
                    </tr>
                    <tr>
                      <td align="right" class="text-right">
                        <h5 class="font-size-15 mb-1">Beneficiary Branch Number</h5>
                      </td>
                      <td align="left" class="text-left"><?= $user->firstname . ' ' . $user->lastname ?></td>
                    </tr>
                    <tr>
                      <td align="right" class="text-right">
                        <h5 class="font-size-15 mb-1">Beneficiary Bank Account Number</h5>
                      </td>
                      <td align="left" class="text-left"><?= $detail->to_accno ?></td>
                    </tr>
                    <!-- <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Beneficiary Reference</h5></td>
                                        <td align="left" class="text-left"><?= $user->firstname . ' ' . $user->lastname ?></td>
                                    </tr> -->


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>