function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == "Lainnya" ? 'block' : 'none';
}