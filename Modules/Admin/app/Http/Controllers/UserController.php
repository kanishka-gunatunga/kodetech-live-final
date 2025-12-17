<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;


use App\Models\User;
use App\Models\MigrantDetails;
use App\Models\Product;
use App\Models\ProductIcon;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceIcon;
use App\Models\Testimonial;
use setasign\Fpdi\Fpdi;


use File;
use Mail;
use Image;
use PDF;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin::user.login');
        }
        if ($request->isMethod('post')) {

            $request->validate([
                'email'   => 'required',
                'password'  => 'required'
            ]);

            $user_data = array(
                'email'  => $request->get('email'),
                'status'  => "active",
                'user_role'  => 1,
                'password' => $request->get('password')
            );

            if (Auth::attempt($user_data)) {
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Wrong Login Details');
            }
        }
    }

    public function dashboard(Request $request)
    {

        // $migrant = MigrantDetails::paginate(10);
        $products = Product::all();
        $projects = Project::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $clients = Client::all();
        $blogs = Blog::all();
        $careers = Career::all();
        $servicesIcons = ServiceIcon::all();
        $productIcons = ProductIcon::all();

        return view('admin::dashboard.dashboard', compact(['products','projects','services','clients','testimonials','blogs','careers','servicesIcons','productIcons']));
    }

    // public function addMigrant(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         // Validate inputs with a file type check for PDFs
    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'receipt_number' => 'required|string|max:255',
    //             'serial_number' => 'required|string|max:255',
    //             'pdf_page_1' => 'required|file|mimes:pdf',
    //             'pdf_page_2' => 'required|file|mimes:pdf',
    //             'pdf_page_3' => 'required|file|mimes:pdf',
    //             'pdf_page_4' => 'required|file|mimes:pdf',
    //             'pdf_page_5' => 'required|file|mimes:pdf',
    //             'pdf_page_6' => 'required|file|mimes:pdf',
    //         ], [
    //             // Custom error message for invalid file format
    //             'pdf_page_1.mimes' => 'The file must be a PDF.',
    //             'pdf_page_2.mimes' => 'The file must be a PDF.',
    //             'pdf_page_3.mimes' => 'The file must be a PDF.',
    //             'pdf_page_4.mimes' => 'The file must be a PDF.',
    //             'pdf_page_5.mimes' => 'The file must be a PDF.',
    //             'pdf_page_6.mimes' => 'The file must be a PDF.',
    //         ]);

    //         // Directory to save uploads
    //         $uploadsDir = public_path('uploads');

    //         // Save each PDF file and store their paths
    //         $pdfFiles = [];
    //         for ($i = 1; $i <= 6; $i++) {
    //             $uploadedFile = $request->file("pdf_page_$i");

    //             // Check if the file is not a PDF
    //             if ($uploadedFile->getClientMimeType() !== 'application/pdf') {
    //                 return redirect()->back()->with('error', 'All files must be in PDF format.');
    //             }

    //             $fileName = time() . "-page$i-" . $uploadedFile->getClientOriginalName();
    //             $uploadedFile->move($uploadsDir, $fileName);
    //             $pdfFiles[] = $uploadsDir . '/' . $fileName;
    //         }

    //         // Merge PDFs
    //         $mergedPdfPath = $uploadsDir . '/' . time() . '-merged.pdf';
    //         $this->mergePdfs($pdfFiles, $mergedPdfPath);

    //         // Save data to the database
    //         $migrantDetails = new MigrantDetails();
    //         $migrantDetails->name = $request->name;
    //         $migrantDetails->passport_no = $request->receipt_number;
    //         $migrantDetails->serial_no = $request->serial_number;
    //         $migrantDetails->page_1 = basename($pdfFiles[0]);
    //         $migrantDetails->page_2 = basename($pdfFiles[1]);
    //         $migrantDetails->page_3 = basename($pdfFiles[2]);
    //         $migrantDetails->page_4 = basename($pdfFiles[3]);
    //         $migrantDetails->page_5 = basename($pdfFiles[4]);
    //         $migrantDetails->page_6 = basename($pdfFiles[5]);
    //         $migrantDetails->merge_pdf = basename($mergedPdfPath);

    //         $migrantDetails->save();

    //         return redirect()->back()->with('success', 'Migrant details and merged PDF saved successfully.');
    //     }

    //     return view('admin::migrant.add_migrant');
    // }

    /**
     * Merge multiple PDFs into a single PDF.
     *
     * @param array $pdfFiles Array of PDF file paths to merge.
     * @param string $outputPath Path to save the merged PDF.
     * @return void
     */
    // private function mergePdfs(array $pdfFiles, string $outputPath)
    // {
    //     $pdf = new Fpdi();

    //     foreach ($pdfFiles as $file) {
    //         $pageCount = $pdf->setSourceFile($file);
    //         for ($i = 1; $i <= $pageCount; $i++) {
    //             $template = $pdf->importPage($i);
    //             $pdf->AddPage();
    //             $pdf->useTemplate($template);
    //         }
    //     }

    //     $pdf->Output($outputPath, 'F');
    // }



    public function logout()
    {


        // Logout the user
        Auth::logout();

        // Clear the session
        Session::flush();

        // Redirect to login page
        return redirect()->to('/admin');
    }
}
