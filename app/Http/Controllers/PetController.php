<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PetController extends Controller
{

    public function index() {
        return view("pets.index");
    }

    public function submitForm(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required',
        ]);

        return redirect()->route("pets.id", $validatedData);
    }

    public function getByid(Request $request) {
        $data = $request->all();
        $res = Http::get("https://petstore.swagger.io/v2/pet/" . $data['id']);
        $pet = $res->json();

        return view("pets.id", ['pet' => $pet]);
    }

    public function submitFormAvailable(Request $request) {
        $validatedData = $request->validate([
            'isAvailable' => 'required',
        ]);

        return redirect()->route("pets.status", $validatedData);
    }

    public function status(Request $request) {
        $data = $request->all();
        $res = Http::get("https://petstore.swagger.io/v2/pet/findByStatus?status=" . $data["isAvailable"]);
        $pets = $res->json();

        return view("pets.status", ['pets' => $pets]);
    }

    public function uploadImage(Request $request) {
        $data = $request->all();
        $res = Http::post("https://petstore.swagger.io/v2/pet/" . $data['id'] . "/uploadImage",
        [
            'image' => $request->input('image'),
        ]);

        if ($res->successful()) {
            return redirect()->route('pets.index')->with('success', 'Image added successfully!');
        } else {
            return redirect()->route('pets.index')->with('error', 'Failed to ad image. Please try again.');
        }
    }

    public function addPet(Request $request) {
        $res = Http::post("https://petstore.swagger.io/v2/pet/",
        [
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'photoUrls' => $request->input('photoUrls'),
            'status' => $request->input('status'),
        ]);

        if ($res->successful()) {
            return redirect()->route('pets.index')->with('success', 'Pet added successfully!');
        } else {
            return redirect()->route('pets.index')->with('error', 'Failed to add pet. Please try again.');
        }
    }

    public function updatePet(Request $request) {
        $res = Http::put("https://petstore.swagger.io/v2/pet/",
        [
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'photoUrls' => $request->input('photoUrls'),
            'status' => $request->input('status'),
        ]);

        if ($res->successful()) {
            return redirect()->route('pets.index')->with('success', 'Pet updated successfully!');
        } else {
            return redirect()->route('pets.index')->with('error', 'Failed to updated pet. Please try again.');
        }
    }

    public function updatePetById(Request $request) {
        $res = Http::put("https://petstore.swagger.io/v2/pet/",
        [
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'status' => $request->input('status'),
        ]);

        if ($res->successful()) {
            return redirect()->route('pets.index')->with('success', 'Pet updated successfully!');
        } else {
            return redirect()->route('pets.index')->with('error', 'Failed to updated pet. Please try again.');
        }
    }

    public function deletePet(Request $request) {
        $data = $request->all();
        $res = Http::delete("https://petstore.swagger.io/v2/pet/" . $data['id']);

        if ($res->successful()) {
            return redirect()->route('pets.index')->with('success', 'Pet deleted successfully!');
        } else {
            return redirect()->route('pets.index')->with('error', 'Failed to delete pet. Please try again.');
        }
    }

    
}
