<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();

        return view('admin.contacts.index', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'nama'            => 'nullable|string|max:255',
            'telepon'         => 'nullable|string|max:50',
            'email'           => 'nullable|email|max:255',
            'instagram'       => 'nullable|url|max:255',
            'alamat'          => 'nullable|string',
            'jam_operasional' => 'nullable|string|max:255',
            'maps_url'        => 'nullable|url|max:255',
            'whatsapp_url'    => 'nullable|url|max:255',
            'status'          => 'nullable|boolean',
        ]);

        $data['status'] = $request->boolean('status');

        $contact->update($data);

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Data kontak berhasil diperbarui.');
    }
}
