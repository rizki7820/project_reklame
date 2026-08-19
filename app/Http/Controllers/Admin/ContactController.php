<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // ==========================================
    // METHOD PUBLIK / FRONT-END
    // ==========================================

    /**
     * Halaman Publik Kontak (/kontak)
     */
    public function publicIndex()
    {
        $contact = Contact::where('status', true)->first() ?? new Contact([
            'nama'            => 'Doa Ibu Production',
            'telepon'         => '0858-2866-6615',
            'email'           => 'info@doaibuproduction.com',
            'alamat'          => 'Banjarmasin, Kalimantan Selatan',
            'jam_operasional' => 'Senin - Sabtu: 08.00 - 17.00 WITA',
            'whatsapp_url'    => 'https://wa.me/6285828666615',
        ]);

        return view('kontak', compact('contact'));
    }

    // ==========================================
    // METHOD ADMIN / BACK-END
    // ==========================================

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