<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/strict.dtd"/>
    <xsl:template match="/">
       <html>
           <head>
               <title>Nelflis de oscar</title>
           </head>
           <body>
               <table border="1"> 
                   <tr>
                       <th align="center" colspan="4">Peliculas</th>
                   </tr>
                   <tr>  
                       <th align="center">Titulo</th>  
                       <th align="center">Clasificación</th>  
                       <th align="center">Género</th>  
                       <th align="center">Duración</th> 
                   </tr>  
                   <xsl:for-each select="CatalogoVod/contenido">
                       <xsl:for-each select="peliculas/genero/titulo">   
                           <tr> 
                               <td>
                                   <xsl:value-of select="."/>
                               </td>
                               <td>
                                   <xsl:for-each select=".">
                                       <xsl:value-of select="@clasificacion"/>
                                   </xsl:for-each>
                               </td>
                               <td>
                                   <xsl:for-each select="..">
                                       <xsl:value-of select="@nombre"/>
                                   </xsl:for-each>
                               </td>
                               <td>
                                   <xsl:for-each select=".">
                                       <xsl:value-of select="@duracion"/>  
                                   </xsl:for-each>          
                               </td>   
                           </tr>  
                       </xsl:for-each>
                   </xsl:for-each>  
               </table>
               <br></br>
               <!-- INICIA TABAL DE SERIES -->
               <table border="1"> 
                   <tr>
                       <th align="center" colspan="5">Series</th>
                   </tr>
                   <tr>  
                       <th align="center">Titulo</th>  
                       <th align="center">Clasificación</th>  
                       <th align="center">Género</th>  
                       <th align="center">Capitulos</th> 
                       <th align="center">temporada</th> 
                   </tr>  
                   <xsl:for-each select="CatalogoVod/contenido">
                       <xsl:for-each select="series/genero/titulo">   
                           <tr> 
                               <td>
                                   <xsl:value-of select="."/>
                               </td>
                               <td>
                                   <xsl:for-each select=".">
                                       <xsl:value-of select="@clasificacion"/>
                                   </xsl:for-each>
                               </td>
                               <td>
                                   <xsl:for-each select="..">
                                       <xsl:value-of select="@nombre"/>
                                   </xsl:for-each>
                               </td>
                               <td>
                                   <xsl:for-each select=".">
                                       <xsl:value-of select="@capitulos"/>
                                   </xsl:for-each>          
                               </td>
                               <td>
                                   <xsl:for-each select=".">  
                                       <xsl:value-of select="@duracion"/>
                                   </xsl:for-each>          
                               </td>
                           </tr>  
                       </xsl:for-each>
                   </xsl:for-each>  
               </table>
           </body> 
       </html>        
    </xsl:template>
</xsl:stylesheet>