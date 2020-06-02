<?php

    namespace App\Http\Controllers;

    use App\User;
    use Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;

    class UserController extends Controller
    {
        public function authenticate(Request $request)
        {
            $credentials = $request->only('email', 'password');

            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 400);
                }
            } catch (JWTException $e) {
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            return response()->json(compact('token'));
        }

        public function register(Request $request)
        {
                 $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);

            if($validator->fails()){
                    return response()->json($validator->errors()->toJson(), 400);
            }

            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'forzarcambioclave'=>0
            ]);
            $enviarEmail= $user->EmailBienvenida($user);
            
            $token = JWTAuth::fromUser($user);
            
            return response()->json(compact('user','token'),201);
        }

        public function getAuthenticatedUser()
        {
                try {

                        if (! $user = JWTAuth::parseToken()->authenticate()) {
                                return response()->json(['user_not_found'], 404);
                        }

                } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                        return response()->json(['token_expired'], $e->getStatusCode());

                } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                        return response()->json(['token_invalid'], $e->getStatusCode());

                } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                        return response()->json(['token_absent'], $e->getStatusCode());

                }

                return response()->json(compact('user'));
        }


        public function index(Request $request)
        {
                return view('login');
        }

        public function login(Request $request)
        {

                $rules = array(
                        'email'    => $request->get('email'), 
                        'password' =>$request->get('password')
                    );
                    
                dd(Auth::login($rules));


                ;
                /*if () {
                        // Authentication passed...
                        return redirect()->intended('home');
                }else{
                      return json_encode(array("Error en el usuario / contraseña."));
                }*/
        }

        public function updateProfile(Request $request)
        {



        
                        $user = User::find( Auth::user()->id);
                
                        $user->name = $request->nya;
                        $user->email= $request->email;
                        $user->telefono= $request->phone;
                        $user->json= $request->nick;
                        $user->save();
                        $output = "<h1>Actualizado correctamente.</h1>";
                        return redirect()->route('cuenta')->with(compact('user','output'));
               

        }

        public function cuenta()
        {
                
    
                if (Auth::check()){
                $user = User::find(Auth::user()->id);
                $output ='';
                return view('cuenta2')->with(compact('user','output'));
                }else{
                        return redirect()->route('login');
                }           
        }

    }