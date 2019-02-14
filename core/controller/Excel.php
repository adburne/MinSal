<?php

/**
* 13 de febrero del 2019
* Rutinas para el manejo de planillas de cálculo
**/

class Excel
{
    function exportExcel($expTitle, $expCellName, $fileName, $expTableData)
    {
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);
        $objPHPExcel = new PHPExcel();

        $styleTitleArray = array(
            'font'  => array(
                'bold'  => true,
                'color' => array('rgb' => '000000'),
                'size'  => 10,
                'name'  => 'Verdana'
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            ));
        $styleBodyArray = array(
                'font'  => array(
                    'bold'  => false,
                    'color' => array('rgb' => '000000'),
                    'size'  => 10,
                    'name'  => 'Verdana'
                ));
            
        $cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:' . $cellName[$cellNum - 1] . '1');
        for ($i = 0; $i < $cellNum; $i++) {
            $objPHPExcel->getActiveSheet()->getStyle($cellName[$i].'2')->applyFromArray($styleTitleArray);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i] . '2', $expCellName[$i]);
        }
        for ($i = 0; $i < $dataNum; $i++) {
            for ($j = 0; $j < $cellNum; $j++) {
//                $objPHPExcel->getActiveSheet()->getStyle($cellName[$j].($i + 3).':'.$cellName[$j].($i + 3))->getFont()->setSize(10);
                $objPHPExcel->getActiveSheet()->getStyle($cellName[$j].($i + 3))->applyFromArray($styleBodyArray);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$j] . ($i + 3), $expTableData[$i][$j]);
}
        }
        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xls"');
        header("Content-Disposition:attachment;filename={$fileName}.xls");
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }
}

?>