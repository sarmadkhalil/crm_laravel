@extends('layouts.master')


@section('title')
  Dashboard
@endsection



@section('content')
  <div class="row">
     <div class="col-lg-4">
       <div class="card card-chart">
         <div class="card-header bg-dark text-white">
           <h5 class="card-category">Company Information</h5>
           <h4 class="card-title ">Employees</h4>
         </div>
         <div class="card-body" style="background-color: rgba(0, 0, 0, 0.4) !important;">
           <h4><?php
           echo Auth::user()->count();
           ?></h4>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-md-6">
       <div class="card card-chart">
         <div class="card-header bg-dark text-white">
           <h5 class="card-category">Customers</h5>
           <h4 class="card-title">Customers</h4>
         </div>
         <div class="card-body" style="background-color: rgba(0, 0, 0, 0.4) !important;">
           <h4><?php
           echo Auth::user()->count();
           ?></h4>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-md-6">
       <div class="card card-chart">
         <div class="card-header bg-dark text-white">
           <h5 class="card-category">Customers</h5>
           <h4 class="card-title">Leads</h4>
         </div>
         <div class="card-body" style="background-color: rgba(0, 0, 0, 0.4) !important;">
           <h4><?php
           echo Auth::user()->count();
           ?></h4>
         </div>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-md-6">
       <div class="card  card-tasks">
         <div class="card-header ">
           <h5 class="card-category">Backend development</h5>
           <h4 class="card-title">Tasks</h4>
         </div>
         <div class="card-body ">
           <div class="table-full-width table-responsive">
             <table class="table">
               <tbody>
                 <tr>
                   <td>
                     <div class="form-check">
                       <label class="form-check-label">
                         <input class="form-check-input" type="checkbox" checked>
                         <span class="form-check-sign"></span>
                       </label>
                     </div>
                   </td>
                   <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                   <td class="td-actions text-right">
                     <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                       <i class="now-ui-icons ui-2_settings-90"></i>
                     </button>
                     <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                       <i class="now-ui-icons ui-1_simple-remove"></i>
                     </button>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <div class="form-check">
                       <label class="form-check-label">
                         <input class="form-check-input" type="checkbox">
                         <span class="form-check-sign"></span>
                       </label>
                     </div>
                   </td>
                   <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                   <td class="td-actions text-right">
                     <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                       <i class="now-ui-icons ui-2_settings-90"></i>
                     </button>
                     <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                       <i class="now-ui-icons ui-1_simple-remove"></i>
                     </button>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <div class="form-check">
                       <label class="form-check-label">
                         <input class="form-check-input" type="checkbox" checked>
                         <span class="form-check-sign"></span>
                       </label>
                     </div>
                   </td>
                   <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                   </td>
                   <td class="td-actions text-right">
                     <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                       <i class="now-ui-icons ui-2_settings-90"></i>
                     </button>
                     <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                       <i class="now-ui-icons ui-1_simple-remove"></i>
                     </button>
                   </td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
         <div class="card-footer ">
           <hr>
           <div class="stats">
             <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-6">
       <div class="card">
         <div class="card-header">
           <h5 class="card-category">All Persons List</h5>
           <h4 class="card-title">Projects</h4>
         </div>
         <div class="card-body">
           <div class="table-responsive">
             <table class="table">
               <thead class=" text-primary">
                 <th>
                   Name
                 </th>
                 <th>
                   Country
                 </th>
                 <th>
                   City
                 </th>
                 <th class="text-right">
                   Salary
                 </th>
               </thead>
               <tbody>
                 <tr>
                   <td>
                     Dakota Rice
                   </td>
                   <td>
                     Niger
                   </td>
                   <td>
                     Oud-Turnhout
                   </td>
                   <td class="text-right">
                     $36,738
                   </td>
                 </tr>
                 <tr>
                   <td>
                     Minerva Hooper
                   </td>
                   <td>
                     Curaçao
                   </td>
                   <td>
                     Sinaai-Waas
                   </td>
                   <td class="text-right">
                     $23,789
                   </td>
                 </tr>
                 <tr>
                   <td>
                     Sage Rodriguez
                   </td>
                   <td>
                     Netherlands
                   </td>
                   <td>
                     Baileux
                   </td>
                   <td class="text-right">
                     $56,142
                   </td>
                 </tr>
                 <tr>
                   <td>
                     Doris Greene
                   </td>
                   <td>
                     Malawi
                   </td>
                   <td>
                     Feldkirchen in Kärnten
                   </td>
                   <td class="text-right">
                     $63,542
                   </td>
                 </tr>
                 <tr>
                   <td>
                     Mason Porter
                   </td>
                   <td>
                     Chile
                   </td>
                   <td>
                     Gloucester
                   </td>
                   <td class="text-right">
                     $78,615
                   </td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection


@section('scripts')

@endsection
