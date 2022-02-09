<?php

use App\Http\Controllers\AbonneController;
use App\Http\Controllers\About;
use App\Http\Controllers\AnimateurControlleur;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\ConseilController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DCPController;
use App\Http\Controllers\EvenementAdministrateur;
use App\Http\Controllers\EvenementAdministration;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementAdministration;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\MembreIndividuelController;
use App\Http\Controllers\ProgressBarController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Home route
 */

Route::get('/', function (){
    return redirect('home'); //Use in soril
});

Route::get('home', [HomeController::class, 'home'])->name('home'); // Use in soril

/*
 * Library and publication
 */
Route::get('library', [HomeController::class, 'library'])->name('library'); //Use in soril

Route::resource('journal', DCPController::class); // Use in soril
Route::resource('author', AuthorController::class); //Use in soril
Route::resource('article', ArticlesController::class); //Use in soril
Route::post('authorLogin', [AuthorController::class, 'login'])->name('authorLogin'); //Use in soril
Route::get('authorProfile', [AuthorController::class, 'profile'])->name('authorProfile'); //Use in soril
Route::get('logOutAuthor', [AuthorController::class, 'log_out_author'])->name('logOutAuthor'); //Use in soril
Route::get('journal-articles', [DCPController::class, 'articles'])->name('journal-articles'); //Use in soril
Route::get('submit', [DCPController::class, 'submit'])->name('submit'); //Use in soril
Route::get('normesProfessionnels', [HomeController::class, 'professional'])->name('professional');
Route::get('developpementContinu', [HomeController::class, 'devContinu'])->name('dev-continu');
Route::get('offresEmploi', [HomeController::class, 'emplois'])->name('emplois'); //Use in soril
Route::get('detailsEmploi', [HomeController::class, 'detailEmploi'])->name('detailsEmplois'); //Use in soril
Route::post('candidat', [HomeController::class, 'addCandidate'])->name('candidat');

/*
 * About route
 */

Route::get('about', [About::class, 'home'])->name('about');


/*
 * Membre Route
 */
Route::get('membre', [MembreController::class, 'home'])
    ->name('membre'); //Use in soril
Route::get('individual', [MembreController::class, 'individual'])
    ->name('individual'); //Use in soril
Route::post('add_individual', [MembreController::class, 'add_individual'])
    ->name('add_individual');
Route::get('collective', [MembreController::class, 'collective'])
    ->name('collective'); //Use in soril
Route::post('add_collective', [MembreController::class, 'add_collective'])
    ->name('add_collective');


/*
 * Evenements
 */
Route::get('all-events', [EvenementController::class, 'home'])
    ->name('evenementss'); //Use in soril
Route::get('event_details', [EvenementController::class, 'detail'])
    ->name('evenementDetail');
Route::get('register_evenement', [EvenementController::class, 'regEvent'])
    ->name('regEvent');
Route::post('register_evenement_post', [EvenementController::class, 'regEventPost']);
Route::get('conference/{id}', [EvenementController::class, 'conference'])
    ->name('conference'); //Use in soril
/*
 * Dashboard Route
 */

Route::get('pdfviewer', [HomeController::class, 'pdf'])->name('pdfviewer');;

/*
 * Publication
 */
Route::resource('publication', PublicationController::class);
Route::get('nospublications', [PublicationController::class, 'publication'])
    ->name('publications');

Route::get('subscribe', [PublicationController::class, 'subscribe'])
    ->name('subscribe');

Route::resource('abonne', AbonneController::class);

Route::post('login-subscribe', [AbonneController::class, 'login'])
    ->name('login-subscribe');

Route::get('shows', [AbonneController::class, 'shows'])
    ->name('shows');
Route::get('liste-abonne', [AbonneController::class, 'abs'])
    ->middleware(['auth'])
    ->name('liste');
Route::get('update-status', [AbonneController::class, 'updates'])
    ->name('mufano');


/*
 * Conseils Techniques et de Qualifications
 */
Route::get('certifications', [ConseilController::class, 'techniques'])
    ->name('certification'); //Use in soril
Route::get('conseils-qualifications', [ConseilController::class, 'qualifications'])
    ->name('qualifications');
Route::get('moreinformation', [ConseilController::class, 'moreinfo'])
    ->name('moreinfo'); //Use in soril
Route::get('log-out-subscribe', [ConseilController::class, 'logOut'])
    ->name('log-out-subscribe'); //Use in soril

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('managements', ManagementController::class);
    Route::resource('evenements', EvenementAdministrateur::class);
    Route::resource('conseil-administration', \App\Http\Controllers\ConseilAdministration::class);
    Route::resource('messages', \App\Http\Controllers\MessagePresident::class);
    Route::resource('consultatif', \App\Http\Controllers\Consultatif::class);
    Route::resource('partenaires', \App\Http\Controllers\PartenaireController::class);
    Route::resource('emplois', \App\Http\Controllers\EmploiController::class);
    Route::resource('programmes', \App\Http\Controllers\ProgrammeController::class);
    Route::resource('animateurs', AnimateurControlleur::class);
    Route::post('updates_animateurs', [AnimateurControlleur::class, 'update_animateur'])
        ->name('updates_animateurs');
    Route::resource('sponsor', \App\Http\Controllers\Sponsor::class);
    Route::post('add_sponsors', [\App\Http\Controllers\Sponsor::class, 'sponsors'])
        ->name('add_sponsors');
    Route::resource('ticket', \App\Http\Controllers\Ticket::class);
    Route::post('deleteReservation/{id}', [\App\Http\Controllers\Ticket::class, 'deletes'])
        ->name('deleteReservation');
    Route::resource('individuel', MembreIndividuelController::class);
    Route::resource('corporate', \App\Http\Controllers\MembreCorporateController::class);
    Route::resource('commissions', CommissionController::class);
    Route::resource('abonnement', \App\Http\Controllers\PublicationAdministration::class);
    Route::resource('articles', \App\Http\Controllers\ArticleAdministration::class);
    Route::resource('profileaffilie', \App\Http\Controllers\ProfileAffile::class);
});


Route::post('/upload-doc-file', [ProgressBarController::class, 'uploadToServer']);

Route::post('/update_user', [Dashboard::class, 'update']);

require __DIR__.'/auth.php';
