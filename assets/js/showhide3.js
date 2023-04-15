function namedata(data)
{
    if(data=='HADIR')
    {
        $('#divb').css('display','none');
        $('.div_l').css('display','block');
    }
    else if(data=='SAKIT' || data=='IZIN')
    {
        $('#divb').css('display','block');
        $('.div_l').css('display','none');
    }
}