<?php

use App\Http\Controllers\ActionsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\GoalStatusController;
use App\Http\Controllers\GratitudeController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TodoController;
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

Route::get('/', [FrontendController::class,'home']);

Route::prefix('super-admin')->group(function () {
    Route::get('/', [AuthController::class,'superAdminLogin'])->name('super-admin-login');
    Route::post('/auth', [AuthController::class,'superAdminAuthenticate']);
    Route::get('/page-editor', [SuperAdminController::class,'pageEditor']);
    Route::get('/pages', [SuperAdminController::class,'pages']);
    Route::get('/page', [SuperAdminController::class,'page']);
    Route::get('/update-schema', [SuperAdminController::class,'updateSchema']);
    Route::post('/save-post', [SuperAdminController::class,'savePost']);
    Route::post('/set-theme', [SuperAdminController::class,'saveTheme']);



});

Route::get('/validate-paypal-subscription', [DashboardController::class, 'validatePaypalSubscription']);
Route::post('/paypal-ipn', [SuperAdminController::class, "paypalIpn"]);
Route::get('/super-admin/dashboard', [SuperAdminController::class,'dashboard']);


Route::get('/subscription-plans', [SuperAdminController::class,'saasPlans']);
Route::get('/subscription-plan', [SuperAdminController::class,'createSaasPlan']);
Route::get('/payment-gateways', [SuperAdminController::class,'paymentGateways']);
Route::get('/configure-payment-gateway', [SuperAdminController::class,'configurePaymentGateway']);
Route::post('/save-subscription-plan', [SuperAdminController::class,'subscriptionPlanPost']);
Route::post('/configure-gateway', [SuperAdminController::class,'configurePaymentGatewayPost']);
Route::get('/user-profile', [SuperAdminController::class,'userProfile']);
Route::get('/super-admin-profile', [SuperAdminController::class,'adminProfile']);
Route::get('/super-admin-setting', [SuperAdminController::class,'adminSetting']);
Route::get('/workspaces', [SuperAdminController::class,'workspaces']);
Route::get('/add-user', [SuperAdminController::class,'addUser']);
Route::get('/delete-workspace/{id}', [SuperAdminController::class,'deleteWorkspace']);
Route::get('/delete-user/{id}', [SuperAdminController::class,'deleteUser']);

Route::get("/edit-workspace", [
    SuperAdminController::class,
    "editWorkspace",
]);

Route::post("/settings/{action}", [SettingController::class, "settingsStore"]);

Route::get("/view-workspace", [
    SuperAdminController::class,
    "viewWorkspace",
]);

Route::post("/save-workspace", [
    SuperAdminController::class,
    "saveWorkspace",
]);

Route::get('/users', [SuperAdminController::class,'users']);
Route::get('/emails', [SuperAdminController::class,'newsletterEmail']);
Route::get('/export-subscribers', [SuperAdminController::class,'exportSubscribers']);

Route::get('/landingpage', [SuperAdminController::class,'landingPage']);
Route::get('/pricingpage', [SuperAdminController::class,'pricingPage']);
Route::get('/termspage', [SuperAdminController::class,'termsPage']);
Route::get('/cookiepage', [SuperAdminController::class,'cookiePage']);
Route::get('/privacypage', [SuperAdminController::class,'privacyPage']);
Route::get('/contactpage', [SuperAdminController::class,'contactPage']);

Route::post('/save-hero-section', [SuperAdminController::class,'heroSection']);
Route::post('/save-feature1-section', [SuperAdminController::class,'feature1Section']);
Route::post('/save-feature2-section', [SuperAdminController::class,'feature2Section']);
Route::post('/save-partner-section', [SuperAdminController::class,'partnerSection']);
Route::post('/save-story1-section', [SuperAdminController::class,'story1Section']);

Route::post('/save-story2-section', [SuperAdminController::class,'story2Section']);
Route::post('/save-newsletter-section', [SuperAdminController::class,'newsletterSection']);
Route::post('/save-number-section', [SuperAdminController::class,'numberSection']);
Route::post('/save-privacy-section', [SuperAdminController::class,'savePrivacy']);
Route::get("/activate", [SuperAdminController::class, "activateLicense"]);
Route::post("/activate-license", [SettingController::class, "activateLicensePost"]);
Route::post('/save-pricing-hero-section', [SuperAdminController::class,'pricingHeroSection']);
Route::post('/save-pricing-testimonial-section', [SuperAdminController::class,'pricingTestimonialSection']);
Route::post('/save-contact-section', [SuperAdminController::class,'contactSection']);

Route::get("/email-setting", [SuperAdminController::class, "emailSetting"]);
Route::post("/save-email-setting", [SuperAdminController::class, "saveEmailSetting"]);

Route::post('/save-terms-section', [SuperAdminController::class,'saveTerms']);
Route::post('/save-cookie-section', [SuperAdminController::class,'saveCookie']);

Route::get('/subscribe', [SubscribeController::class,'subscribe']);
Route::post('/payment-stripe', [SubscribeController::class,'paymentStripe']);
Route::get("/cancel-subscription", [SubscribeController::class, "cancelSubscription"]);








Route::get('/login', [AuthController::class,'login'])->name('login');

Route::get('/signup', [AuthController::class,'signup']);
Route::get('/forgot-password', [AuthController::class,'forgotPassword']);
Route::get('/password-reset', [AuthController::class,'passwordReset']);

Route::get('/goals', [GoalsController::class,'goals']);
Route::get('/set-goal', [GoalsController::class,'setGoal']);
Route::get('/visionboard', [GoalsController::class,'visionBoard']);
Route::get('/new-vision-board', [GoalsController::class,'newBoard']);
Route::get('/plans', [PlansController::class,'plans']);
Route::get('/view-plan', [PlansController::class,'planView']);
Route::get('/weekly-plans', [PlansController::class,'weeklyPlans']);
Route::get('/view-weekly-plans', [PlansController::class,'ViewWeeklyPlans']);
Route::get('/weekly-plan', [PlansController::class,'weeklyPlan']);
Route::get('/goal-plans', [PlansController::class,'goalPlans']);
Route::get('/calendar/{action?}', [PlansController::class,'calendarAction']);

Route::get('/notes', [ActionsController::class,'notes']);
Route::get('/todos', [ActionsController::class,'todos']);
Route::get('/view-todo', [ActionsController::class,'viewTodo']);
Route::get('/add-tolearn', [ActionsController::class,'addtoLearn']);
Route::get('/add-task', [ActionsController::class,'addTask']);
Route::get('/add-note', [ActionsController::class,'addNote']);
Route::get('/view-note', [ActionsController::class,'viewNote']);
Route::get('/tolearn', [ActionsController::class,'tolearn']);
Route::get('/view-tolearn', [ActionsController::class,'viewToLearn']);
Route::get('/projects', [ProjectController::class,'projects']);
Route::get('/create-project', [ProjectController::class,'createProject']);
Route::get('/gratitude', [GratitudeController::class,'gratitude']);


Route::get('/logout', [AuthController::class,'logout']);
Route::get('/add-five-min-journal', [GratitudeController::class,'fiveMinuteJournal']);
Route::get('/view-journal', [GratitudeController::class,'viewJournal']);
Route::get('/view-project', [ProjectController::class,'projectView']);
Route::get('/goal-edit/{id}', [GoalsController::class,'goalEdit']);
Route::get('/user-edit/{id}', [ProfileController::class,'userEdit']);



Route::get('/home', [FrontendController::class,'home']);
Route::get('/pricing', [FrontendController::class,'pricing']);
Route::get('/privacy', [FrontendController::class,'privacy']);
Route::get('/contact', [FrontendController::class,'contact']);
Route::post('/save-email', [FrontendController::class,'emailSave']);
Route::get("/termsandconditions", [FrontendController::class, "termsCondition"]);
Route::get("/cookie-policy", [FrontendController::class, "cookiePolicy"]);



Route::get('/download/{id}', [DownloadController::class,'download']);
Route::get('/dashboard', [DashboardController::class,'dashboard']);
Route::get('/new-user', [ProfileController::class,'newUser']);
Route::get('/documents', [DocumentController::class,'documents']);

Route::get('/profile', [ProfileController::class,'profile']);

Route::get('/staff', [ProfileController::class,'staff']);
Route::get('/settings', [SettingController::class,'settings']);
Route::get('/billing', [SettingController::class,'billing']);
Route::get('/delete/{action}/{id}', [DeleteController::class,'delete']);

Route::post('/save-reset-password', [AuthController::class,'resetPasswordPost']);
Route::post('/post-new-password', [AuthController::class,'newPasswordPost']);
Route::post('/user-change-password', [ProfileController::class,'userChangePasswordPost']);
Route::post('/todos/{action}',[TodoController::class,'store']);
Route::post('/goals/{action}',[GoalStatusController::class,'store']);
Route::post('/login', [AuthController::class,'loginPost']);
Route::post('/super-admin/login', [AuthController::class,'superAdminLoginPost']);
Route::post('/signup', [AuthController::class,'signupPost']);
Route::post('/save-goal', [GoalsController::class,'goalPost']);
Route::post('/save-goal-plan', [PlansController::class,'goalPlanPost']);
Route::post('/save-to-learn', [ActionsController::class,'toLearnPost']);
Route::post('/save-note', [ActionsController::class,'notePost']);
Route::post('/save-project', [ProjectController::class,'projectPost']);
Route::post('/save-weeklyplan', [PlansController::class,'weeklyPlanPost']);
Route::post('/save-journal', [GratitudeController::class,'fiveJournalPost']);
Route::post('/save-todos', [ActionsController::class,'todoPost']);
Route::post('/document', [DocumentController::class,'documentPost']);

Route::post('/vision-board', [GoalsController::class,'imagePost']);

Route::get('/vision-categories', [GoalsController::class,'visionCategories']);
Route::post('/category-save', [GoalsController::class,'categoryPost']);
Route::get('/category-edit', [GoalsController::class,'categoryEdit']);


Route::post('/settings', [SettingController::class,'settingsPost']);
Route::post('/set-theme', [SettingController::class,'saveTheme']);
Route::post('/profile', [ProfileController::class,'profilePost']);
Route::post('/save-event', [PlansController::class,'eventPost']);
Route::post('/user-post', [ProfileController::class,'userPost']);

Route::get('/view-goal', [GoalsController::class,'goalView']);

Route::get('/business-plans', [PlansController::class,'businessPlans']);
Route::get('/write-business-plan', [PlansController::class,'writeBusinessPlans']);
Route::get('/view-business-plan', [PlansController::class,'viewBusinessPlan']);
Route::post('/business-plan-post', [PlansController::class,'businessPlanPost']);

Route::get('/add-quote', [GratitudeController::class,'addQuote']);
Route::get('/quotes', [GratitudeController::class,'quoteList']);

Route::post('/quoteSave', [GratitudeController::class,'quoteSave']);


Route::get('/clock', [ActionsController::class,'promoClock']);






Route::get("/brainstorming", [PlansController::class, "brainStorm"]);
Route::get("/brainstorming-list", [PlansController::class, "brainStormList"]);
Route::post("/save-canvas", [PlansController::class, "saveCanvas"]);
