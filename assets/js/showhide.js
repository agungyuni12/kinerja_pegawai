function namedata(data)
{
    if(data=='HADIR')
    {
        $('#divb').css('display','none');
        $('#divm').css('display','block');
        $('#divc').css('display','block');
    }
    else if(data=='SAKIT' || data=='IZIN' || data=='CUTI')
    {
        $('#divb').css('display','block');
        $('#divm').css('display','none');
        $('#divc').css('display','none');

    }
}