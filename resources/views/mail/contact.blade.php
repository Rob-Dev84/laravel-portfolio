<h3>{{ _("You have a contact message request") }}</h3>
<table>
    <tr>
        <th>{{ _("Name") }}</th>
        <td>{{ $name }}</td>
    </tr>
    <tr>
        <th>{{ _("Email") }}</th>
        <td>{{ $email }}</td>
    </tr>
</table>

<div>
    {{ $body }}
</div>